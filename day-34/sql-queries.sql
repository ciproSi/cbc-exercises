-- Using the database world write and execute a SQL query that would select all records int the table country_language that have 110 (id of the English language) in their language_id column and left join the appropriate records in the countries table using the country_id column.

-- Select only columns from the countries table.

SELECT `countries`.*
FROM `country_language`
LEFT JOIN `countries`
    ON `country_language` . `country_id` = `countries`. `id`
WHERE `language_id` = 110