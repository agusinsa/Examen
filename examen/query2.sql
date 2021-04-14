SELECT
carrier.`Name`,
sum(cantidad_de_envios.`cantidad de envios`*costos.Costo) as total
FROM
cantidad_de_envios
INNER JOIN costos ON cantidad_de_envios.Zona = costos.Zona
INNER JOIN carrier ON carrier.CarrierID = costos.CarrierID
GROUP BY carrier.`Name`
HAVING
total <= 3000000
