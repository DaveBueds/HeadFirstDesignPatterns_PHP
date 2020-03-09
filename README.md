# Head First Design Patterns | examples written in PHP
Examples of the book head first design patterns written in PHP

### Run the code:
- `cd` to folder and run composer autoload: `composer dump-autoload`
- run `php index.php`


## 1. The Strategy Pattern
Definition: Strategy pattern defines a family of algorithms, 
encapsulates each one, and makes them interchangeable. Strategy lets the algorithm 
vary independently from clients that use it.

- Encapsulate what varies
- Program to interfaces, not implementations
- Favor composition over inheritence

## 2. The Observer Pattern
Definition: The observer pattern defines a one-to-many dependency
between objects so that when one object changes state, all of its dependents are
notified and updated automatically.

- Strive for looslely coupled designs between objects that interact.