# 🌐 Desarrollo de Aplicaciones en Internet  
## 🧪 Evaluación de Laboratorio 1 – Sección D

**Ciclo:** III  
**Fecha de entrega:** 21/09/2024  

---

## 🧑‍🎓 Indicaciones Generales

- Evaluación **individual**.
- Solo se puede presentar **durante el horario del laboratorio**.
- El código debe subirse a un **repositorio de Github Classroom**.
- Las páginas deben tener diseño, de lo contrario se descontarán 2 puntos.

---

## 🔺 Pregunta 1 – Área del Triángulo (6 puntos)

### Requisitos:
- Ingresar los lados del triángulo (a, b, c) en un formulario HTML.
- Calcular el área utilizando la fórmula de Herón:  
  \[
  p = \frac{a + b + c}{2} \\
  \text{Área} = \sqrt{p(p - a)(p - b)(p - c)}
  \]
- Mostrar el resultado en una página PHP.

### HTML:
- Título: **“Pregunta 1 – Área del Triángulo”** centrado y resaltado.
- Tres campos numéricos obligatorios (mínimo 1, valor por defecto 1).
- Botón: **Calcular**.
- **No enviar datos por URL**.

### Archivos:
- Nombres: `iniciales_pregunta1.html` y `iniciales_pregunta1.php`.

### Notas:
- Usar `sqrt()` de PHP.
- Comentar en PHP con nombre completo y fecha actual.

---

## 🔢 Pregunta 2 – Triángulo de Pascal (8 puntos)

### Requisitos:
- Ingresar N ≥ 3 (cantidad de filas) en HTML.
- Generar el triángulo usando arrays bidimensionales, bucles y condicionales.
- Mostrar los resultados en una página PHP.

### HTML:
- Título: **“Pregunta 2 – Triángulo de Pascal”** centrado y resaltado.
- Campo numérico obligatorio (mínimo 3).
- Botón: **Calcular**.
- **No enviar datos por URL**.

### Archivos:
- Nombres: `iniciales_pregunta2.html` y `iniciales_pregunta2.php`.

### Notas:
- Implementar funciones para calcular y mostrar los datos.
- Comentar en PHP con nombre completo y fecha actual.

---

## 🍇 Pregunta 3 – Asociación de Vinicultores (6 puntos)

### Contexto:
- Se fija un precio inicial por kilo de uva.
- Tipos: A y B | Tamaños: 1 y 2
- Reglas:
  - Tipo A:  
    - Tamaño 1 → +0.20  
    - Tamaño 2 → +0.30  
  - Tipo B:  
    - Tamaño 1 → −0.30  
    - Tamaño 2 → −0.50  

### HTML:
- Título: **“Pregunta 3 – Asociación de Vinicultores”** centrado y resaltado.
- Campo numérico obligatorio para cantidad de uva (en kilos).
- Select obligatorio para tipo de uva:  
  `[ SELECCIONE ], Tipo A, Tipo B`
- Select obligatorio para tamaño de uva:  
  `[ SELECCIONE ], Tamaño 1, Tamaño 2`
- Campo numérico obligatorio para el precio inicial por kilo.
- Botón: **Calcular**.
- **No enviar datos por URL**.

### Archivos:
- Nombres: `iniciales_pregunta3.html` y `iniciales_pregunta3.php`.

### Notas:
- Calcular la ganancia final en PHP según las reglas.
- Comentar en PHP con nombre completo y fecha actual.

