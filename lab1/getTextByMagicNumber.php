<?php
    GetTextByMagicNumber($_POST["magicNumber"]);

function GetTextByMagicNumber($magicNumber)
{
    switch ($magicNumber)
    {
        case 1:
            echo 'Этот человек 100% лидер. Исключительно благодаря его трудолюбию и способности быть в теме ему достается то, что он хотел.
            Но все это только, потому что 1 сама прикладывает огромное количество усилий для этого.
            Удача, к сожалению, этого человека не очень любит и совсем не ждет.';
            break;
        case 2:
            echo 'Представителя этого числа удача и везение поджидают буквально на каждом повороте.
            Стоит взяться за любое дело, как в кротчайшие сроки все буде успешно и никаких преград на пути не предвидется.';
            break;
        case 3:
            echo 'Вот, кого-кого, а 3 удача вообще покинула и возвращаться не планирует.
            Люди с таким числом удачи практически полностью ее лишены.
            Из-за этого они часто впадают в отчаяние, но очень скоро берут себя в руки и просто делают то, что нужно, совсем не надеясь на удачу и везение.
            Все, чего добиваются 3 - только благодаря способности встать и сделать, не откладывая на потом.';
            break;
        case 4:
            echo 'Представители этого числа не слишком приманивают удачу.
            Она, конечно, присутствует в их судьбе и помогает, но на их пути встречается масса препятствий.';
            break;
        case 5:
            echo 'Эти люди нуждаются в постоянных инструкциях к действию.
            А удача - дама привередливая и не будет никого инструктировать.
            Поэтому, все, что остается 5 - это "пахать без перерыва", ведь удача к ним совсем не благосклонна.';
            break;
        case 6:
            echo 'Число хранит неимоверную удачу.
            В самых запущенных делах, в провальных проектах, на сложных экзаменах представители этого числа найдут выход.';
            break;
        case 7:
            echo 'Успех - постоянный их спутник.
            Представители этого числа сознательно выстраивают правильную цепочку действий и заданий,
            которые стоит выполнить для достижения желаемого.
            Если необходимо, они подстроятся под новые обстоятельства';
            break;
        case 8:
            echo 'Это число способствует успехам в карьере, бизнесе - во всем, что имеет связь с финансами. 
            Обычно такие люди на главное место ставят именно деньги, 
            потому что их мышление таково: любовь или дружба – не главные потребности человека.';
            break;
        case 9:
            echo  'Удача сопутствует представителям этого числа.
            Есть единственная мелочь, которую стоит выполнять: чтобы удача не отвернулась в самую неподходящую минуту - не надо восхвалять собственные успехи. ';
            break;
    }
}