monster1 = {"health" => 500}
monster2 = {"health" => 500}

for i in 1..5
	attack = rand(1..100)
	puts "Round #{i}"
	puts "monster1 attacks monster2 with #{attack} damage"
	puts "monster2's health is now #{monster2["health"] - attack}"
	monster2["health"] = monster2["health"] - attack
	attack2 = rand(1..100)
	puts "monster2 attacks monster1 with #{attack2} damage"
	puts "monster1's health is now #{monster1["health"] - attack2}"
	monster1["health"] = monster1["health"] - attack
	if(i == 5)
		if monster1["health"] > monster2["health"]
			puts "Monster 1 Won!!"
		else
			puts "Monster 2 Won!!"
		end
	end
end

# puts rand(1..100)
# puts monster1["health"];