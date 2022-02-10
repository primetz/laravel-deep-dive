<?php

namespace App\Models;

class News
{
    private array $news = [
        1 => [
            'category_id' => 1,
            'title' => 'News 1',
            'short_description' => 'Lorem ipsum dolor sit amet.',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consectetur distinctio dolores ducimus error ex laudantium minima modi, nemo porro quae sunt tempora tempore. Eligendi exercitationem facere officiis possimus sint!'
        ],
        2 => [
            'category_id' => 1,
            'title' => 'News 2',
            'short_description' => 'Lorem ipsum dolor sit amet.',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consectetur distinctio dolores ducimus error ex laudantium minima modi, nemo porro quae sunt tempora tempore. Eligendi exercitationem facere officiis possimus sint!'
        ],
        3 => [
            'category_id' => 1,
            'title' => 'News 3',
            'short_description' => 'Lorem ipsum dolor sit amet.',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consectetur distinctio dolores ducimus error ex laudantium minima modi, nemo porro quae sunt tempora tempore. Eligendi exercitationem facere officiis possimus sint!'
        ],
        4 => [
            'category_id' => 1,
            'title' => 'News 4',
            'short_description' => 'Lorem ipsum dolor sit amet.',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consectetur distinctio dolores ducimus error ex laudantium minima modi, nemo porro quae sunt tempora tempore. Eligendi exercitationem facere officiis possimus sint!'
        ],
        5 => [
            'category_id' => 2,
            'title' => 'News 5',
            'short_description' => 'Lorem ipsum dolor sit amet.',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consectetur distinctio dolores ducimus error ex laudantium minima modi, nemo porro quae sunt tempora tempore. Eligendi exercitationem facere officiis possimus sint!'
        ],
        6 => [
            'category_id' => 2,
            'title' => 'News 6',
            'short_description' => 'Lorem ipsum dolor sit amet.',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consectetur distinctio dolores ducimus error ex laudantium minima modi, nemo porro quae sunt tempora tempore. Eligendi exercitationem facere officiis possimus sint!'
        ],
        7 => [
            'category_id' => 2,
            'title' => 'News 7',
            'short_description' => 'Lorem ipsum dolor sit amet.',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consectetur distinctio dolores ducimus error ex laudantium minima modi, nemo porro quae sunt tempora tempore. Eligendi exercitationem facere officiis possimus sint!'
        ],
        8 => [
            'category_id' => 2,
            'title' => 'News 8',
            'short_description' => 'Lorem ipsum dolor sit amet.',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consectetur distinctio dolores ducimus error ex laudantium minima modi, nemo porro quae sunt tempora tempore. Eligendi exercitationem facere officiis possimus sint!'
        ],
        9 => [
            'category_id' => 3,
            'title' => 'News 9',
            'short_description' => 'Lorem ipsum dolor sit amet.',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consectetur distinctio dolores ducimus error ex laudantium minima modi, nemo porro quae sunt tempora tempore. Eligendi exercitationem facere officiis possimus sint!'
        ],
        10 => [
            'category_id' => 3,
            'title' => 'News 10',
            'short_description' => 'Lorem ipsum dolor sit amet.',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consectetur distinctio dolores ducimus error ex laudantium minima modi, nemo porro quae sunt tempora tempore. Eligendi exercitationem facere officiis possimus sint!'
        ],
        11 => [
            'category_id' => 3,
            'title' => 'News 11',
            'short_description' => 'Lorem ipsum dolor sit amet.',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consectetur distinctio dolores ducimus error ex laudantium minima modi, nemo porro quae sunt tempora tempore. Eligendi exercitationem facere officiis possimus sint!'
        ],
        12 => [
            'category_id' => 3,
            'title' => 'News 12',
            'short_description' => 'Lorem ipsum dolor sit amet.',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consectetur distinctio dolores ducimus error ex laudantium minima modi, nemo porro quae sunt tempora tempore. Eligendi exercitationem facere officiis possimus sint!'
        ],
        13 => [
            'category_id' => 4,
            'title' => 'News 13',
            'short_description' => 'Lorem ipsum dolor sit amet.',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consectetur distinctio dolores ducimus error ex laudantium minima modi, nemo porro quae sunt tempora tempore. Eligendi exercitationem facere officiis possimus sint!'
        ],
        14 => [
            'category_id' => 4,
            'title' => 'News 14',
            'short_description' => 'Lorem ipsum dolor sit amet.',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consectetur distinctio dolores ducimus error ex laudantium minima modi, nemo porro quae sunt tempora tempore. Eligendi exercitationem facere officiis possimus sint!'
        ],
        15 => [
            'category_id' => 4,
            'title' => 'News 15',
            'short_description' => 'Lorem ipsum dolor sit amet.',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consectetur distinctio dolores ducimus error ex laudantium minima modi, nemo porro quae sunt tempora tempore. Eligendi exercitationem facere officiis possimus sint!'
        ],
        16 => [
            'category_id' => 4,
            'title' => 'News 16',
            'short_description' => 'Lorem ipsum dolor sit amet.',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consectetur distinctio dolores ducimus error ex laudantium minima modi, nemo porro quae sunt tempora tempore. Eligendi exercitationem facere officiis possimus sint!'
        ],
        17 => [
            'category_id' => 5,
            'title' => 'News 17',
            'short_description' => 'Lorem ipsum dolor sit amet.',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consectetur distinctio dolores ducimus error ex laudantium minima modi, nemo porro quae sunt tempora tempore. Eligendi exercitationem facere officiis possimus sint!'
        ],
        18 => [
            'category_id' => 5,
            'title' => 'News 18',
            'short_description' => 'Lorem ipsum dolor sit amet.',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consectetur distinctio dolores ducimus error ex laudantium minima modi, nemo porro quae sunt tempora tempore. Eligendi exercitationem facere officiis possimus sint!'
        ],
        19 => [
            'category_id' => 5,
            'title' => 'News 19',
            'short_description' => 'Lorem ipsum dolor sit amet.',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consectetur distinctio dolores ducimus error ex laudantium minima modi, nemo porro quae sunt tempora tempore. Eligendi exercitationem facere officiis possimus sint!'
        ],
        20 => [
            'category_id' => 5,
            'title' => 'News 20',
            'short_description' => 'Lorem ipsum dolor sit amet.',
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consectetur distinctio dolores ducimus error ex laudantium minima modi, nemo porro quae sunt tempora tempore. Eligendi exercitationem facere officiis possimus sint!'
        ],
    ];

    public function all(): array
    {
        return $this->news;
    }

    public function getById(int $id): array
    {
        return $this->news[$id];
    }

    public function getByCategoryId(int $id): array
    {
        $news = [];
        foreach ($this->news as $key => $value) {
            if ($value['category_id'] === $id) {
                $news[$key] = $value;
            }
        }
        return $news;
    }
}
