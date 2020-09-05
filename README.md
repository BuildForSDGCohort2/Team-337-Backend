
# API DOCUMENTATION

This is a grapghql API with Laravel. The API can be explored with [GraphiQL](https://www.electronjs.org/apps/graphiql)

## API Endpoint 

```bash
https://richesterconsulting.com/stemxus-team-337-api
```

## Book Feature

### Query Books
Retrieve the list of books

```
{
  books {
    id,
    title,
    author,
    number_of_pages,
    isbn,
   
    
    }
}
```

> **Screenshoot** sample screenshoot from get books query.

<div style="text-align:center">
  <img src="https://i.imgur.com/Qn9somb.png" alt="Query Books Screenshot">
</div>


### Query Book By Id
Get a book by the ID

```
{
  book(id:1) {
    id,
    title,
    author,
    number_of_pages,
    isbn,
   
    
    }
}
```

> **Screenshoot** sample screenshoot from get book by ID query.

<div style="text-align:center">
  <img src="https://i.imgur.com/pF9rMRk.png" alt="Get Book By ID Screenshot">
</div>


### Create A Book
Add a new book

```
mutation updateBook {
  updateBook(
    id:1,
    title: "Deesire Seyram",
    author: "desireseyram@test.com", 
    number_of_pages: "222", 
    type: "Technology",
    level: "Basic",
    isbn: "635353353",
  	price: "GHC45",
  	url: "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/ableson.jpg",) {
    id
    title
    author
    number_of_pages
    type
    level
    isbn
    
  }
}
```
> **Screenshoot** sample screenshoot from create book mutation.

<div style="text-align:center">
  <img src="https://i.imgur.com/tQRmBEM.png" alt="Create Book Screenshot">
</div>


### Update a Book
Update details of a book

```
mutation updateBook {
  updateBook(
    id:1,
    title: "Deesire Seyram",
    author: "desireseyram@test.com", 
    number_of_pages: "222", 
    type: "Technology",
    level: "Basic",
    isbn: "635353353",
  	price: "GHC45",
  	url: "https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/ableson.jpg",) {
    id
    title
    author
    number_of_pages
    type
    level
    isbn
    
  }
}
```

> **Screenshoot** sample screenshoot from update book by ID query.

<div style="text-align:center">
  <img src="https://i.imgur.com/Q78XYBe.png" alt="Update Book By ID Screenshot">
</div>

<<<<<<< HEAD
=======
## About Laravel

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/07cbec4939b54e418ea0d35aeafc4608)](https://app.codacy.com/gh/BuildForSDGCohort2/Team-337-Backend?utm_source=github.com&utm_medium=referral&utm_content=BuildForSDGCohort2/Team-337-Backend&utm_campaign=Badge_Grade_Settings)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
>>>>>>> Add Codacy badge
