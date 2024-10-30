import Product


class DiscountedProduct(Product):
    def __init__(self, product_id, name, price, discount):
        super().__init__(product_id, name, price)
        self.discount = discount

    def get_discounted_price(self):
        return self.price * (1 - self.discount / 100)

    def __str__(self):
        return f"{self.name}: ${self.get_discounted_price()} (Discount: {self.discount}%)"