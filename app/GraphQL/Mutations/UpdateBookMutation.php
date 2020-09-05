<?php

namespace App\graphql\Mutations;

use App\Book;
use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;

class UpdateBookMutation extends Mutation
{
    protected $attributes = [
        'name' => 'updateBook'
    ];

    public function type(): Type
    {
        return GraphQL::type('Book');
    }

    public function args(): array
    {
        return [
            'title' => [
                'name' => 'title',
                'type' =>  Type::nonNull(Type::string()),
            ],
            'author' => [
                'name' => 'author',
                'type' =>  Type::nonNull(Type::string()),
            ],
            'number_of_pages' => [
                'name' => 'number_of_pages',
                'type' =>  Type::nonNull(Type::string()),
            ],
            'type' => [
                'name' => 'type',
                'type' =>  Type::nonNull(Type::string()),
            ],
            'level' => [
                'name' => 'level',
                'type' =>  Type::nonNull(Type::string()),
            ],
            'description' => [
                'name' => 'description',
                'type' =>  Type::nonNull(Type::string()),
            ],
            'thumbnail' => [
                'name' => 'thumbnail',
                'type' =>  Type::nonNull(Type::string()),
            ],
            'isbn' => [
                'name' => 'isbn',
                'type' =>  Type::nonNull(Type::string()),
            ],
            'price' => [
                'name' => 'price',
                'type' =>  Type::nonNull(Type::string()),
            ],
            'url' => [
                'name' => 'url',
                'type' =>  Type::nonNull(Type::string()),
            ],
        ];
    }

    public function resolve($root, $args)
    {
        $book = Book::findOrFail($args['id']);
        $book->fill($args);
        $book->save();

        return $book;
    }
}