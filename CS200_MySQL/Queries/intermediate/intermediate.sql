SELECT city.city_id, customer.first_name, customer.last_name, customer.email, address.address
FROM customer 
JOIN address 
ON address.address_id=customer.address_id
JOIN city
ON city.city_id=address.city_id
WHERE city.city_id =312
ORDER BY customer.last_name ASC;

SELECT film.title, film.description, film.release_year, rating, film.special_features, category.name
FROM film
JOIN film_category
ON film_category.film_id=film.film_id
JOIN category
ON category.category_id=film_category.category_id
WHERE category.name = "comedy"
ORDER BY film.title ASC;

SELECT actor.actor_id, film.title, film.description, film.release_year
FROM film
JOIN film_actor
ON film_actor.film_id=film.film_id
JOIN actor
ON actor.actor_id=film_actor.actor_id
WHERE actor.actor_id =5
ORDER BY actor.title ASC;

SELECT city.city_id, store.store_id, customer.first_name, customer.last_name, customer.email, address.address
FROM customer
JOIN address
ON address.address_id=customer.address_id
JOIN city
ON city.city_id=address.city_id
JOIN store
ON store.store_id=customer.store_id
WHERE city.city_id in (1, 42, 312, 459)
AND store.store_id =1
ORDER BY city.city_id ASC;

SELECT actor.actor_id, film.title, film.description, film.release_year, film.rating, film.special_features
FROM film
JOIN film_actor
ON film_actor.film_id=film.film_id
JOIN actor
ON actor.actor_id=film_actor.actor_id
WHERE actor.actor_id = 15
AND film.rating = "G"
AND film.special_features like "behind the%";

SELECT film.film_id, actor.first_name, actor.last_name, actor.last_update
FROM film
JOIN film_actor
ON film_actor.film_id=film.film_id
JOIN actor
ON actor.actor_id=film_actor.actor_id
WHERE film.film_id =369
ORDER BY actor.last_name ASC;

SELECT film.rental_rate, film.title, film.description, film.release_year, film.rating, film.special_features, category.name
FROM film
JOIN film_category
ON film_category.film_id=film.film_id
JOIN category
ON category.category_id=film_category.category_id
WHERE category.name = "drama"
AND film.rental_rate= 2.99
ORDER BY film.title ASC;

SELECT film.title, film.description, film.release_year, film.rating, film.special_features, category.name, actor.first_name, actor.last_name
FROM film
JOIN film_actor
ON film_actor.film_id=film.film_id
JOIN actor
ON actor.actor_id=film_actor.actor_id
JOIN film_category
ON film_category.film_id=film.film_id
JOIN category
ON category.category_id=film_category.category_id
WHERE category.name = "action"
AND actor.first_name = "Sandra"
AND actor.last_name = "Kilmer"
ORDER BY film.title ASC;


