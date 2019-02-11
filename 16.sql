#   16. Предложите запрос на создание наиболее оптимальной MySQL таблицы user_scores, которая будет хранить результаты выполненных пользователями тестов и будет удовлетворять следующим требованиям:

#    предполагается хранение большого числа записей, несколько миллионов и больше;
#    поле user_id - обычный цифровой идентификатор пользователя;
#    поле is_winner - флаг, победитель или нет. В системе принято флаги хранить в виде y/n, где "y" - победитель, "n" - проигравший;
#    поле score - набранные очки, от 0 до 10 000
#    к данной таблице будет выполняться очень часто всего один вариант запроса:

SELECT
    user_id,
    is_winner,
    score
FROM `user_scores`
WHERE is_winner = 'y'
ORDER BY score DESC
LIMIT 100

CREATE TABLE `user_scores` (
    `user_id` MEDIUMINT(9) NOT NULL,
    `is_winner` CHAR(1) NULL DEFAULT NULL,
    `score` SMALLINT(5) NOT NULL DEFAULT '0',
    UNIQUE INDEX (`user_id`),
    INDEX `is_winner` (`is_winner`),
    INDEX `score` (`score`)
);