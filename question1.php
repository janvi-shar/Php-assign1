<?php
class ShoppingCart {
    private $items = array();

    public function addItem($itemName, $price, $quantity) {
        $this->items[] = array(
            'itemName' => $itemName,
            'price' => $price,
            'quantity' => $quantity
        );
    }

    public function calculateTotal() {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item['price'] * $item['quantity'];
        }
        return $total;
    }

    public function checkout() {
        $total = $this->calculateTotal();
        if ($total > 5000) {
            $discountedTotal = $total * 0.9; // Apply 10% discount
            echo "Total price after 10% discount: Rs. " . $discountedTotal;       } else {
            echo "Original total price: Rs. " . $total;
        }
    }
}

// Example usage:
$cart = new ShoppingCart();
$cart->addItem("Item 1", 2500, 2);
$cart->addItem("Item 2", 1500, 3);
$cart->addItem("Item 3", 1000, 1);

echo "Total price: Rs. " . $cart->calculateTotal() . "\n";
$cart->checkout();
?>