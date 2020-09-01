<?php
namespace App\GraphQL\Types;

use App\Book;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class BookType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Book',
        'description' => 'Details ',
        'model' => Book::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'Id of the book',
            ],
            'title' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Title of Book',
            ],
            'author' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Author of Book',
            ],
            'number_of_pages' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Number of pages of book',
            ],
            'type' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Type of book',
            ],
            'level' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Level of book',
            ],
            'description' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Description of book',
            ],
            'thumbnail' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Type of book',
            ],
            'isbn' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Type of book',
            ],
            
           
        ];
    }
}