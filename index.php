<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Викторина</title>
    <style>
      /* Оформление викторины */
      .container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
      }

      #quiz {
        max-width: 500px;
        margin: 0 auto;
      }
      .question {
        margin-bottom: 20px;
      }
      .question h2 {
        margin-top: 0;
      }
      .answer {
        margin-bottom: 10px;
      }
      .answer label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
      }
      .submit-btn {
        display: block;
        margin-top: 20px;
      }
    </style>
  </head>
  <body>
    <div id="quiz">
      <h1>Викторина</h1>
      <form action="quiz-results.php" method="post">
        <div class="question">
          <h2>Вопрос 1:</h2>
          <p>Что такое HTML?</p>
          <div class="answer">
            <label>
              <input type="radio" name="q1" value="a">
              a) Язык программирования
            </label>
            <label>
              <input type="radio" name="q1" value="b">
              b) Язык разметки
            </label>
            <label>
              <input type="radio" name="q1" value="c">
              c) Язык стилей
            </label>
            <label>
              <input type="radio" name="q1" value="d">
              d) Язык запросов
            </label>
          </div>
        </div>
        <div class="question">
          <h2>Вопрос 2:</h2>
          <p>Кто создал язык программирования Python?</p>
          <div class="answer">
            <label>
              <input type="radio" name="q2" value="a">
              a) Guido van Rossum
            </label>
            <label>
              <input type="radio" name="q2" value="b">
              b) James Gosling
            </label>
            <label>
              <input type="radio" name="q2" value="c">
              c) Brendan Eich
            </label>
            <label>
              <input type="radio" name="q2" value="d">
              d) Larry Wall
            </label>
          </div>
        </div>
        <div class="question">
          <h2>Вопрос 3:</h2>
          <p>Какой тег используется для создания ссылок в HTML?</p>
          <div class="answer">
            <label>
              <input type="radio" name="q3" value="a">
              a) &lt;link&gt;
            </label>
            <label>
              <input type="radio" name="q3" value="b">
              b) &lt;a&gt;
            </label>
            <label>
              <input type="radio" name="q3" value="c">
              c) &lt;img&gt;
            </label>
                        <label>
              <input type="radio" name="q3" value="d">
              d) &lt;span&gt;
            </label>
          </div>
        </div>
        <div class="question">
          <h2>Вопрос 4:</h2>
          <p>Какая версия JavaScript была выпущена в 2020 году?</p>
          <div class="answer">
            <label>
              <input type="radio" name="q4" value="a">
              a) ES5
            </label>
            <label>
              <input type="radio" name="q4" value="b">
              b) ES6
            </label>
            <label>
              <input type="radio" name="q4" value="c">
              c) ES7
            </label>
            <label>
              <input type="radio" name="q4" value="d">
              d) ES2020
            </label>
          </div>
        </div>
        <div class="question">
          <h2>Вопрос 5:</h2>
          <p>Что такое CSS?</p>
          <div class="answer">
            <label>
              <input type="radio" name="q5" value="a">
              a) Язык программирования
            </label>
            <label>
              <input type="radio" name="q5" value="b">
              b) Язык разметки
            </label>
            <label>
              <input type="radio" name="q5" value="c">
              c) Язык стилей
            </label>
            <label>
              <input type="radio" name="q5" value="d">
              d) Язык запросов
            </label>
          </div>
        </div>
        <div class="question">
          <h2>Вопрос 6:</h2>
          <p>Какое свойство CSS используется для задания фона элемента?</p>
          <div class="answer">
            <label>
              <input type="radio" name="q6" value="a">
              a) color
            </label>
            <label>
              <input type="radio" name="q6" value="b">
              b) background
            </label>
            <label>
              <input type="radio" name="q6" value="c">
              c) border
            </label>
            <label>
              <input type="radio" name="q6" value="d">
              d) font-size
            </label>
          </div>
        </div>
        <div class="question">
          <h2>Вопрос 7:</h2>
          <p>Какой символ используется для обозначения начала комментария в CSS?</p>
          <div class="answer">
            <label>
              <input type="radio" name="q7" value="a">
              a) //
            </label>
            <label>
              <input type="radio" name="q7" value="b">
              b) &lt;!--
            </label>
                        <label>
              <input type="radio" name="q7" value="c">
              c) /*
            </label>
            <label>
              <input type="radio" name="q7" value="d">
              d) #
            </label>
          </div>
        </div>
        <div class="question">
          <h2>Вопрос 8:</h2>
          <p>Какое свойство CSS используется для задания отступов внутри элемента?</p>
          <div class="answer">
            <label>
              <input type="radio" name="q8" value="a">
              a) margin
            </label>
            <label>
              <input type="radio" name="q8" value="b">
              b) padding
            </label>
            <label>
              <input type="radio" name="q8" value="c">
              c) border
            </label>
            <label>
              <input type="radio" name="q8" value="d">
              d) height
            </label>
          </div>
        </div>
        <button type="submit">Проверить ответы</button>
      </form>
    </div>
  </body>
</html>
