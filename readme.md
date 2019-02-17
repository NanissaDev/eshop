#Set up
1. Run migrations 
2. composer install
3. Create a user admin with credentials email: admin@admin.com and pass: password
4. php artisan voyager:install **Note:** _don't install with dummy data because category is category for products and not posts in the main site but the dummy data will mess that up._ 
5. php artisan voyager:admin admin@admin.com to make the user admin. 
6. You may login to admin by siteurl/admin
7. What you are creating may not have to be made in voyager admin. Don't stress yourself with it. Create it like you will be creating other pages but with uikit (not bootstrap). I have included uikit in the public folder for you and you may create a new layout for just that page with uikit and fontawesome. You may lookup fontawesome cdn. You can also use icons from uikit and any icon library you want if you need to. 
8. You may need to create your own attributes table and product attributes table. 
- attributes table will have predefined attributes like color, size, material, etc. Any new attribute created by the user will be added to this table. It should have user_id in it which refers to the user that created the attribute. All predefined attributes should be attributed to user_id = 1.
- product_attributes table may be for each variant I guess. Do it how you see fit. I intentionally did not include controllers because I do not want to restrict you and make it difficult for you to now have to learn my kinds of code. When you return it, I will know how to merge with mine. 
- tags and categories 