from abc import ABC, abstractmethod

class AbstractProduct(ABC):
    @abstractmethod
    def display(self):
        pass

class ConcreteProduct(AbstractProduct):
    def __init__(self, name, price):
        self.name = name
        self.price = price

    def display(self):
        print(f"Product Name: {self.name}, Price: ${self.price}")
