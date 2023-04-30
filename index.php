<!DOCTYPE html>
<html>
<head>
 <title>Универсальная сайт-платформа для обучения маркетингу</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="styles.css">
</head>
<body>
 <header>
  <nav>
   <ul>
    <li><a href="/">Главная</a></li>
    <li><a href="/courses">Курсы</a></li>
    <li><a href="/about">О проекте</a></li>
    <li><a href="/contacts">Контакты</a></li>
   </ul>
  </nav>
 </header>
 
 <main>
  <h1>Добро пожаловать на универсальную сайт-платформу для обучения маркетингу!</h1>
  
  <section>
   <h2>Популярные курсы</h2>
   <ul>
    <li><a href="/courses/marketing-basics">Основы маркетинга</a></li>
    <li><a href="/courses/digital-marketing">Цифровой маркетинг</a></li>
    <li><a href="/courses/content-marketing">Контент-маркетинг</a></li>
   </ul>
  </section>
  
  <section>
   <h2>Почему стоит выбрать нашу платформу для обучения маркетингу?</h2>
   <p>Мы предлагаем:</p>
   <ul>
    <li>Курсы от ведущих экспертов в области маркетинга</li>
    <li>Максимально удобный формат обучения</li>
    <li>Полный доступ к материалам курсов после оплаты</li>
   </ul>
   <a href="/courses" class="button">Посмотреть все курсы</a>
  </section>
 </main>
 
 <footer>
  <p>© 2021 Универсальная сайт-платформа для обучения маркетингу</p>
 </footer>
</body>
</html>
```

CSS:

```
body {
 font-family: Arial, sans-serif;
 margin: 0;
 padding: 0;
}

nav ul {
 list-style: none;
 margin: 0;
 padding: 0;
}

nav li {
 display: inline-block;
 margin-right: 20px;
}

nav li:last-child {
 margin-right: 0;
}

nav a {
 text-decoration: none;
 color: #444;
}

nav a:hover {
 text-decoration: underline;
}

main {
 max-width: 1200px;
 margin: auto;
 padding: 20px;
}

h1, h2 {
 text-align: center;
 margin: 40px 0;
}

section {
 margin-bottom: 40px;
}

section ul {
 list-style: disc;
 margin-left: 20px;
}

.button {
 display: inline-block;
 margin-top: 20px;
 padding: 10px 20px;
 background-color: #007bff;
 color: #fff;
 border: none;
 border-radius: 5px;
 text-decoration: none;
}

.button:hover {
 background-color: #0265bf;
 cursor: pointer;
}