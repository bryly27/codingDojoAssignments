class RemoveCat < ActiveRecord::Migration
  def change
  	remove_column :categories, :category_id
  end
end
