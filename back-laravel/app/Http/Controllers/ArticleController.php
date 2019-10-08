<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index()
    {
        return Article::all();
    }

    /**
     * Récupère la liste des $number derniers articles en date
     */
    public function lastArticles(int $numberArticles)
    {
        $allArticles = Article::all();
        $lastArticles = [];

        // On remplit la liste avec le dernier, et ainsi de suite jusqu'à $number
        while (count($lastArticles) < $numberArticles && count($allArticles) > 0) {
            // initialisation de la date au premier article
            $lastDate = date_timestamp_get($allArticles[0]->updated_at);
            $indexMax = 0;
            // Parcours de tous les articles pour trouver le dernier
            foreach ($allArticles as $indexArticle => $article) {
                $currentDate = date_timestamp_get($article->updated_at);
                if ($currentDate >= $lastDate) {
                    $indexMax = $indexArticle;
                    $lastDate = $currentDate;
                }
            }
            $lastArticles[] = $allArticles[$indexMax];
            unset($allArticles[$indexMax]);
        }
        
        return response()->json($lastArticles, 200);
    }

    public function show(Article $article)
    {
        return response()->json($article, 200);
    }

    public function store(Request $request)
    {
        $article = Article::create($request->all());

        return response()->json($article, 201);
    }

    public function update(Request $request, Article $article)
    {
        $article->update($request->all());

        return response()->json($article, 200);
    }

    public function delete(Article $article)
    {
        $article->delete();

        return response()->json(null, 204);
    }
}
