
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

