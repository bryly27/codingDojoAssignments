class CommentsController < ApplicationController
  def index
  	@comments = Comment.select("products.name, comments.comment").joins(:product).order(created_at: :asc)
  end

  def create
  	@comments = Comment.new(comment_params)
  	@comments.save
  	if @comments.save
  	  redirect_to '/products/index'
  	else
  	  flash[:error] = @comments.errors.full_messages
  	  redirect_to '/products/index'
  	end
  end

  private

  	def comment_params
  		params.require(:comment).permit(:comment, :product_id)
  	end
end


