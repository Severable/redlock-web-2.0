CREATE TABLE `Users` (
    `ID` int(15) NOT NULL,
    `Nama` varchar(999) NOT NULL,
    `Alamat` varchar(999) NOT NULL,
    `Jabatan` varchar(999) NOT NULL,
    PRIMARY KEY (`ID`)
);

INSERT INTO Users (ID, Nama, Alamat, Jabatan)
VALUES ('1', 'Alex', 'Jalan Kebangsaan', 'Admin'),
    ('2', 'Beta', 'Jalan Kegagalan', 'Office Worker'),
    ('3', 'X-AE-A12', 'SpaceX Headquarters', 'Satpam');
