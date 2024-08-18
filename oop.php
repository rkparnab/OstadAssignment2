<?php

class Book {
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies) {
        $this->title = $title;
        
        $this->availableCopies = $availableCopies;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    public function borrowBook() {

        if ($this->availableCopies > 0) {

            $this->availableCopies--;

        } else {

            echo "Sorry, no copies available for borrowing.\n";
        }
    }

    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function borrowBook(Book $book) {
        $book->borrowBook();
        echo $this->name . " has borrowed " . $book->getTitle() . ".\n";
    }

    public function returnBook(Book $book) {
        $book->returnBook();
        echo $this->name . " has returned " . $book->getTitle() . ".\n";
    }
}



// (Create 2 books)

     $book1 = new Book("The Great Gatsby", 5);

           $book2 = new Book("To Kill a Mockingbird", 3);

// (Create 2 members)

    $member1 = new Member("John Doe");

        $member2 = new Member("Jane Smith");

            // Apply Borrow book method to each member

   $member1->borrowBook($book1);

      $member2->borrowBook($book2);

               // (Print Available Copies with their names)

    echo "Available Copies:\n";

        echo $book1->getTitle() . ": " . $book1->getAvailableCopies() . "\n";

             echo $book2->getTitle() . ": " . $book2->getAvailableCopies() . "\n";

