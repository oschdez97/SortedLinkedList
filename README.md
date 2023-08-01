## SortedLinkedList

[linkedin](www.linkedin.com/in/oscar-luis-hernández-solano-905666225)

> Implementation of a sorted linked list, is like a traditional linked list, which links nodes with the particularity of keeping them in an ascending order in this case. 

> In the particular case of the strings, it sorts according to the ASCII code of the character, it did not take into account accents in in the words or make it insensitive to capital letters. To achieve this, you can define a custom comparer for the Node class and compare both strings in lowercase for example.

#### To run the test cases:

1. Install phpunit
```
$ composer require phpunit/phpunit
```

2. Run the tests
```
$ cd tests
$ ..\vendor\bin\phpunit
```