class CreateOwners < ActiveRecord::Migration
  def change
    create_table :owners do |t|
      t.references :user, index: true
      t.references :blog, index: true

      t.timestamps null: false
    end
    add_foreign_key :owners, :users
    add_foreign_key :owners, :blogs
  end
end
