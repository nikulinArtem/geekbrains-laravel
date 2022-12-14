<?php

namespace App\Models;


use JetBrains\PhpStorm\Pure;

class News
{
    private Category $category;

    private array $news = [
      1 => [
          'id' => 1,
          'title' => 'Новость 1',
          'text' => 'Новость про спорт',
          'isPrivate' => false,
          'category_id' => 1
      ],
      2 => [
          'id' => 2,
          'title' => 'Новость 2',
          'text' => 'Новость про политику',
          'isPrivate' => false,
          'category_id' => 2
      ],
      3 => [
          'id' => 3,
          'title' => 'Новость 3',
          'text' => 'Приватная новость про политику',
          'isPrivate' => true,
          'category_id' => 2
      ]
    ];

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function getNewsByCategorySlug($slug): array
    {
        $id = $this->category->getCategoryIdBySlug($slug);
        $news = [];
        foreach ($this->getNews() as $item) {
            if ($item['category_id'] == $id) {
                $news[] = $item;
            }
        }
        return $news;
    }

    public function getNews(): array
    {
        return $this->news;
    }

    public function getNewsId($id): ?array
    {
        if (array_key_exists($id, $this->getNews())) {
            return $this->getNews()[$id];
        }
        return null;
    }

}
