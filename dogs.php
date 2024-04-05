<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dogs Page</title>
</head>
<body>
    <?php
    class Dog {
        protected $name;

        public function __construct($name) {
            $this->setName($name);
        }

        public function makeSound() {
            return "woof! woof!";
        }

        public function hunt() {
            return "I'm hunting!";
        }

        public function getName() {
            return $this->name;
        }

        public function setName($name) {
            $this->name = $name;
        }
    }

    class Mops extends Dog {
        public function makeSound() {
            return "woof! woof!";
        }

        public function hunt() {
            return "I'm too lazy to hunt.";
        }
    }

    class ToyDog extends Dog {
        public function makeSound() {
            return "I don't make sounds.";
        }

        public function hunt() {
            return "I can't hunt.";
        }
    }

    // Пример использования
    $sibaInu = new Dog("Сіба-іну");
    $mops = new Mops("Мопс");
    $taksa = new Dog("Такса");
    $plushLabrador = new Dog("Плюшевий лабрадор");
    $squeakyTaksa = new ToyDog("Гумова такса з пищалкою");

    echo "{$sibaInu->getName()}: {$sibaInu->makeSound()} | {$sibaInu->hunt()}<br>";
    echo "{$mops->getName()}: {$mops->makeSound()} | {$mops->hunt()}<br>";
    echo "{$taksa->getName()}: {$taksa->makeSound()} | {$taksa->hunt()}<br>";
    echo "{$plushLabrador->getName()}: {$plushLabrador->makeSound()} | {$plushLabrador->hunt()}<br>";
    echo "{$squeakyTaksa->getName()}: {$squeakyTaksa->makeSound()} | {$squeakyTaksa->hunt()}<br>";
    ?>
</body>
</html>
<!-- Як працюють індекси у БД?
Индексы в базах данных обеспечивают быстрый доступ к данным, используя определенное поле или группу полей в качестве ключей для быстрого поиска.

Какие есть JOIN в MySQL?
В MySQL существуют следующие типы JOIN: INNER JOIN, LEFT JOIN, RIGHT JOIN и FULL JOIN.

Что такое dependency inversion?
Dependency Inversion - это принцип программирования, при котором зависимости между компонентами программы организованы таким образом, что высокоуровневые модули не зависят от низкоуровневых деталей реализации, а зависят от абстракций.

В чем разница между GET и POST запросом?
GET используется для запросов, которые не изменяют данные на сервере, в то время как POST используется для отправки данных на сервер для обработки.

В чем разница между вызовом self и static?
self используется для вызова методов и свойств объекта класса, в котором он используется, в то время как static используется для вызова статических методов и свойств класса.

Какая разница между MVP и MVC?
MVP (Model-View-Presenter) и MVC (Model-View-Controller) - это архитектурные шаблоны программного обеспечения, которые используются для разделения логики программы и представления данных.

В чем разница между == и ===?
В PHP == сравнивает значения с учетом типов данных, в то время как === сравнивает значения и типы данных.

Что такое final class и final method?
final class - это класс, который не может быть унаследован. final method - это метод, который не может быть переопределен в подклассах.

Какими фреймворками работали?
Это зависит от конкретного опыта каждого человека. Например, Laravel, Symfony, Django, React, Vue.js, Angular и т. д.

Что можете рассказать о своих навыках, которые дают вам преимущество? Какие из них соответствуют нашим требованиям?
Я офицер в отстаке с большим стажем и не по наслышке знаю что такое ответственность исполнительность,дисциплинированость и своевременное решение поставленной задачи