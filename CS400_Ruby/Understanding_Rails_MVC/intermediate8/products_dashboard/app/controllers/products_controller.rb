class ProductsController < ApplicationController
  def index
  	@products = Product.select("products.name, products.description, products.id, products.price, categories.name as cat").joins(:category).order(name: :asc)
  end

  def new
  	@categories = Category.all
  end

  def create
  	@products = Product.new( product_params )
  	@products.save
  	if @products.save
  	  redirect_to '/products/index'
  	else
  	  flash[:error] = @products.errors.full_messages
  	  redirect_to '/products/new'
  	end
  end

  def show 
  	@products = Product.find(params[:id])
  	@comments = Comment.where(product_id: params[:id])
  end	

  def edit
  	@products = Product.find(params[:id])
  	@categories = Category.all
  end

  def update
  	@products = Product.find(params[:id]).update( product_params )
  	redirect_to '/products/index'
  end

  def destroy
  	Product.find(params[:id]).destroy
  	redirect_to '/products/index'
  end

  private
		def product_params
			params.require(:product).permit(:category_id, :name,  :description, :price)
		end


end