class AddForeignToNinja < ActiveRecord::Migration
  def change
    add_reference :ninjas, :dojo, index: true
    add_foreign_key :ninjas, :dojos
  end
end
