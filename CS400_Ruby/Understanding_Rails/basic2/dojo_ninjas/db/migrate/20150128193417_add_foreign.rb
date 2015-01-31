class AddForeign < ActiveRecord::Migration
  def change
  	add_foreign_key :ninjas, :dojos
  end
end
