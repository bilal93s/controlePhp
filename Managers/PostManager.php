<?php 

namespace App\Managers;

use App\Core\Connection\PDOConnection;
use App\Core\Manager;
use App\Models\Post;

class PostManager extends Manager {

    public function __construct()
    {
        $postManager = new PostManger();

        $resultTp = $postManager->getUserPost(1);

        echo '<pre>' , var_dump($resultTp) , '</pre';
    }

    public function getUserPost(int $id)
    {
        return (new QueryBuilder())
        ->select('p.*, u.*')
        ->from('nfoz_post', 'p')
        ->join('nfoz_post', 'u')
        ->where('p.author = :iduser')
        ->setParameter('iduser', $id)
        ->getQuery()
        ->getArrayResult(Post::class)
        ;
    }
}
