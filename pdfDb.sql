/**
 * Create PDF table which will be used for invoice pdf file generation
 */

CREATE TABLE `mcc`.`pdf` ( `timestampID` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    `providerName` TEXT CHARACTER SET utf8 COLLATE utf8_bin NOT NULL ,
    `providerRoad` TEXT CHARACTER SET utf8 COLLATE utf8_bin NOT NULL ,
    `providerLocality` TEXT CHARACTER SET utf8 COLLATE utf8_bin NOT NULL ,
    `providerCountry` TEXT CHARACTER SET utf8 COLLATE utf8_bin NOT NULL ,
    `clientName` TEXT CHARACTER SET utf8 COLLATE utf8_bin NOT NULL ,
    `clientRoad` TEXT CHARACTER SET utf8 COLLATE utf8_bin NOT NULL ,
    `clientLocality` TEXT CHARACTER SET utf8 COLLATE utf8_bin NOT NULL ,
    `clientCountry` TEXT CHARACTER SET utf8 COLLATE utf8_bin NOT NULL ,
    `invoiceNumber` INT NOT NULL ,
    `date` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    `dateLimitPayment` DATE NOT NULL ,
    `detailDesc` TEXT CHARACTER SET utf8 COLLATE utf8_bin NOT NULL ,
    `detailQty` FLOAT NOT NULL ,
    `detailPriceHtva` FLOAT NOT NULL ,
    `detailPrice` FLOAT NOT NULL ,
    `detailFinalPrice` FLOAT NOT NULL ,
    `totalInvoice` FLOAT NOT NULL ,
    PRIMARY KEY (`timestampID`))
ENGINE = MyISAM;
