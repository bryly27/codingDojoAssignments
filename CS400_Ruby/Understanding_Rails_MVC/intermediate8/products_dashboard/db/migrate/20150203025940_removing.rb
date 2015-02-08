class Removing < ActiveRecord::Migration
  def change
  	remove_column :products, :category_id_id
  	remove_column :products, :category_id
  end
end
