SELECT countries.name, languages.language, languages.percentage 
FROM countries JOIN languages ON languages.country_id=countries.id
WHERE languages.language = 'Slovene'
ORDER BY languages.percentage DESC;

SELECT countries.name, COUNT(*)
FROM countries JOIN cities ON countries.id=cities.country_id
Group BY countries.name
ORDER by count(*) DESC;

SELECT cities.name, cities.population
FROM countries JOIN cities on countries.id=cities.country_id
WHERE countries.name='Mexico' and cities.population>500000
ORDER BY cities.population DESC;

SELECT countries.name, languages.language, languages.percentage
FROM countries JOIN languages ON languages.country_id=countries.id
WHERE languages.percentage >89
ORDER BY languages.percentage DESC;

SELECT countries.name, countries.surface_area, countries.population
FROM countries
WHERE countries.surface_area <501 AND countries.population >100000
ORDER BY countries.name ASC;

SELECT countries.name, countries.government_form, countries.capital, life_expectancy
FROM countries
Where countries.government_form = "Constitutional Monarchy" AND countries.capital > 200 AND countries.life_expectancy > 75
ORDER BY countries.name ASC;

SELECT cities.name, countries.name, cities.district, cities.population
FROM countries JOIN cities ON cities.country_id=countries.id
WHERE countries.name = "Argentina" AND cities.district = "Buenos Aires" AND cities.population > 500000
ORDER BY countries.name ASC;

SELECT countries.region, count(*)
FROM countries
GROUP BY countries.region
ORDER BY countries.region ASC;

