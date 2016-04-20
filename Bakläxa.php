1a. SELECT kundnummer FROM kunder WHERE förnamn=’Per’ OR  förnamn=’Peter’;

b. SELECT förnamn FROM kunder WHERE förnamn LIKE ’___’;


2a. SELECT förnamn, efternamn FROM kunder WHERE mellannamn IS NULL;
b. SELECT förnamn, efternamn FROM Kunder WHERE Mellannamn LIKE '% %';
c.SELECT förnamn, efternamn FROM kunder WHERE Mellanamn IS NULL AND

förnamn='Per';

3a. SELECT förnamn, mellannamn, efternamn FROM kunder WHERE 
Personnummer LIKE '%1_' OR
Personnummer LIKE '%3_' OR
Personnummer LIKE '%5_' OR
Personnummer LIKE '%7_' OR
Personnummer LIKE '%9_';

b. SELECT Kundnummer FROM kunder WHERE Personnummer <= 5002010000;

c. SELECT Kundnummer, förnamn FROM kunder WHERE Personnummer >= 8102010000
AND 
(Personnummer LIKE'%0_' OR
Personnummer LIKE '%2_' OR
Personnummer LIKE '%4_' OR
Personnummer LIKE '%6_' OR
Personnummer LIKE '%8_');

d. SELECT Postnummer FROM Kunder WHERE Kundnummer LIKE '___';

4. SELECT * FROM Kunder WHERE

(Personnummer LIKE '%48__' OR
Personnummer LIKE '%49__' OR
Personnummer LIKE '%50__' OR
Personnummer LIKE '%51__' OR
Personnummer LIKE '%52__' OR
Personnummer LIKE '%53__' OR
Personnummer LIKE '%54__'
)

AND

(Efternamn LIKE 'A%' OR
Efternamn LIKE 'B%' OR
Efternamn LIKE 'C%' OR
Efternamn LIKE 'D%' OR
Efternamn LIKE 'E%' OR
Efternamn LIKE 'F%' OR
Efternamn LIKE 'G%'
);
