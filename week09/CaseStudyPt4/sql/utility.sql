-- Product
INSERT INTO `product` (`ID`, `Name`, `Description`)
VALUES ('1', 'Just Java', 'Regular house blend, decaffeinated coffee or flavor of the day.'),
       ('2', 'Cafe au Lait', 'House blended coffee infused into a smooth, steamed milk.'),
       ('3', 'Iced Cappuccino', 'Sweetened espresso blended with icy-cold milk and served in a chilled glass.')
-- Product.Variant
INSERT INTO `productvariant` (`ID`, `ProductID`, `Variant`, `Price`)
VALUES ('1', '1', 'Endless Cup', '2.00'),
       ('2', '2', 'Single', '2.00'),
       ('3', '2', 'Double', '3.00'),
       ('4', '3', 'Single', '4.75'),
       ('5', '3', 'Double', '5.75')

-- Inventory
INSERT INTO `inventory` (`ID`, `ProductVariantID`, `Quantity`, `Sold`)
VALUES ('1', '1', '1000', '0'),
       ('2', '2', '1000', '0'),
       ('3', '3', '1000', '0'),
       ('4', '4', '1000', '0'),
       ('5', '5', '1000', '0')

-- Inner Join
SELECT *
FROM `product`
INNER JOIN `productvariant` ON `product`.`ID` = `productvariant`.`ProductID`