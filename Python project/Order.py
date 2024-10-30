class Order:
    def __init__(self, order_id, customer):
        self.order_id = order_id
        self.customer = customer
        self.total = sum(product.price for product in customer.cart)

    def display_order(self):
        print(f"Order ID: {self.order_id}")
        print(f"Customer: {self.customer.name}")
        print("Order Details:")
        for product in self.customer.cart:
            print(product)
        print(f"Total Amount: ${self.total}")
