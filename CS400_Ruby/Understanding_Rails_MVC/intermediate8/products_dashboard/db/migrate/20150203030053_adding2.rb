class Adding2 < ActiveRecord::Migration
  def change
  	add_reference :products, :category, index:true
  	add_foreign_key :products, :category
  end
end
