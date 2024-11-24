# BBIT2.2C
168382  Vincet Rimba

# this project is about mini shopping system where customers can add or remove products from their cart, and then create an order. 

   class Product:
    def __init__(self, product_id, name, price):
        self.product_id = product_id
        self.name = name
        self.price = price
    
    def __str__(self):
        return f"{self.name} (${self.price})"

class DiscountedProduct(Product):
    def __init__(self, product_id, name, price, discount):
        super().__init__(product_id, name, price)
        self.discount = discount
    
    @property
    def discounted_price(self):
        return self.price * (1 - self.discount / 100)
    
    def __str__(self):
        return f"{self.name} (${self.discounted_price} after {self.discount}% discount)"

class Customer:
    def __init__(self, customer_id, name):
        self.customer_id = customer_id
        self.name = name
        self.cart = []

    def add_to_cart(self, product):
        self.cart.append(product)
        print(f"Added {product.name} to cart.")
    
    def remove_from_cart(self, product):
        if product in self.cart:
            self.cart.remove(product)
            print(f"Removed {product.name} from cart.")
        else:
            print(f"{product.name} is not in the cart.")

    def view_cart(self):
        if not self.cart:
            print("Cart is empty.")
        else:
            for product in self.cart:
                print(product)

class Order:
    def __init__(self, order_id, customer):
        self.order_id = order_id
        self.customer = customer
        self.items = customer.cart

    def display_order(self):
        if not self.items:
            print("Order is empty.")
        else:
            print(f"Order ID: {self.order_id}")
            print(f"Customer: {self.customer.name}")
            print("Items:")
            for item in self.items:
                print(f" - {item}")

# Create products
p1 = Product(1, "Laptop", 10000)
p2 = DiscountedProduct(2, "Headphones", 200, 10)

# Create customer
cust = Customer(1, "John Doe")
cust = Customer(2, "Krish Tan")

# Add products to cart
cust.add_to_cart(p1)
cust.add_to_cart(p2)

# View cart
cust.view_cart()

# Create order
order = Order(1, cust)
order.display_order()

