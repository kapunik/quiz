# Quiz
Quiz for BeerAndBeardBar
****
# TODO:

- [x] Создать базу данных и внести тестовые данные


* [ ] Сверстрать представление вопросов и ответов:
  - [x] Вопрос + *n* вариантов ответов
  - [ ] Вопрос без вариантов ответа
  - [ ] Вопрос картинкой
  - [ ] Вопрос на соответствия
  - [ ] Блиц-вопросы с ответами да-нет
  - [ ] музыкальный вопрос
  - [ ] видео-вопрос
  - **Используется самая резиновая в мире верстка**


- [ ] клиентская логика

- [ ] серверная логика

****

# Компоненты квиза:

1. Игры
1. Раунды
1. Вопросы
1. Ответы
1. Игроки
1. Ведущий - составитель
1. таймер
1. бланки для заполнения


****

## Таблицы БД:

### Games
id | number |   date   |    teams   |  rounds | score
---|--------|----------|------------|---------|-------
int|   1    |28.12.2018|{1, 2, 3, 4}|{1, 2, 3}|{10,20,10.40}{...}

### Rounds
id | number |   name   | description  |rewards| game
---|--------|----------|--------------|-------|-------
int|   1    | Разминка |Правила раунда|   10  |1

### Questions
id | number |  timer | description |  type  | round
---|--------|--------|-------------|--------|-------
int|   1    | 30 sec |Текст вопроса|noAnsver|1

### Answers
id | number |    confirmation    | description |truth| question
---|--------|--------------------|-------------|-----|-------
int|   1    |Ссылка на википедию |Текст ответа |falce|1

### Teams
id | name
---|--------
1  |Пельменный орден
2  |Рязанские мармоны
3  |Да нормальная команда

``` json
"Games" {
  "id": "int",
  "number": "int",
  "date": "date",
  "teams": [1, 2, 3, 4],
  "rounds": [1 , 2 , 3],
  "score": {
    "1": [10, 15, 10, 15],
    "2": [25, 47, 50, 30]
}

"Rounds" {
  "id": "int",
  "number": "int",
  "name": "text",
  "description": "text",
  "rewards": "int",
  "Game": "int"
}

"Questions"{
  "id": "int",
  "round": "int",
  "number": "int",
  "description": "text",
  "timer": "int",
  "type": "text",
}

"Answers"{
  "id": "int",
  "Question": "int",
  "description": "text",
  "truth": "bool",
  "confirmation": "text",
  "number": "int"
}

"Teams" {
  "id": "int",
  "name": "text"
}
```
