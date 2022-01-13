CREATE DATABASE test1_mysql;

CREATE TABLE `Products` (
                        `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
                        `PRODUCT_ID` int(10) unsigned NOT NULL,
                        `PRODUCT_NAME` varchar(255) NOT NULL,
                        `PRODUCT_PRICE` varchar(255) NOT NULL,
                        `PRODUCT_ARTICLE` varchar(255) NOT NULL,
                        `PRODUCT_QUANTITY` varchar(255) NOT NULL,
                        `DATE_CREATE` datetime NOT NULL,
                        `STATUS` varchar(255) DEFAULT 'VISIBLE',
                        PRIMARY KEY (`ID`),
                        UNIQUE KEY `PRODUCT_ARTICLE` (`PRODUCT_ARTICLE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO Products (ID, PRODUCT_ID, PRODUCT_NAME, PRODUCT_PRICE, PRODUCT_ARTICLE,PRODUCT_QUANTITY,DATE_CREATE) VALUES ('1','1','product-test','1000','001','1','2022-01-01');
INSERT INTO Products (ID, PRODUCT_ID, PRODUCT_NAME, PRODUCT_PRICE, PRODUCT_ARTICLE,PRODUCT_QUANTITY,DATE_CREATE) VALUES ('2','2','product-test 2','2000','002','2','2022-01-02');
INSERT INTO Products (ID, PRODUCT_ID, PRODUCT_NAME, PRODUCT_PRICE, PRODUCT_ARTICLE,PRODUCT_QUANTITY,DATE_CREATE) VALUES ('3','3','product-test 3','3000','003','3','2022-01-03');
INSERT INTO Products (ID, PRODUCT_ID, PRODUCT_NAME, PRODUCT_PRICE, PRODUCT_ARTICLE,PRODUCT_QUANTITY,DATE_CREATE) VALUES ('4','4','product-test 4','4000','004','4','2022-01-04');
INSERT INTO Products (ID, PRODUCT_ID, PRODUCT_NAME, PRODUCT_PRICE, PRODUCT_ARTICLE,PRODUCT_QUANTITY,DATE_CREATE) VALUES ('5','5','product-test 5','5000','005','5','2022-01-05');