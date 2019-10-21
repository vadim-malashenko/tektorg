# tektorg

## 1

Написать функцию, которая на входе принимает строку из скобок, и возвращает *true* если все открытые скобки закрыты, иначе - *false*. Возможные варианты скобок: ()[]{}

Пример:

```
"(){}[]" => true
"([{}])" => true
"(}" => false
"[(])" => false
"[({})](]" => false
```

## 2

Написать SQL запрос.

Есть таблицы *authors* и *books*. Нужно вывести из них данные

- a. по авторам, количеству книг и наличию положительного рейтинга у книг.

Формат вывода:

имя автора, общее количество книг данного автора, признак наличия книг с положительным рейтингом (если *rating* более 4.0, то выводить 1, иначе - 0).

Результаты нужно отсортировать по количеству в обратном порядке

- b. вывести только те, у которых количество книг с положительным рейтингом более 1.

Схемы:

```
CREATE TABLE `authors` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255),
  PRIMARY KEY (`id`)
);

CREATE TABLE `books` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255),
  `year` int,
  `author_id` int,
  `rating` decimal(3, 1),
  PRIMARY KEY (`id`),
  FOREIGN KEY (author_id)
  REFERENCES authors(id)
);
```

## 3

Написать функцию, которая принимает в качестве аргументов число (количество строк в итоговом массиве) и символ (для заполнения массива, см. пример), возвращает массив строк.

Пример:

```
  build(6, "*");
```

Вернет массив:

```
[
  '     *     ',
  '    ***    ',
  '   *****   ',
  '  *******  ',
  ' ********* ',
  '***********',
]
```
