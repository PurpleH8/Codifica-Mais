INSERT INTO registros 
    (nome, sku, descricao, categoria, preco, unidade_medida, peso, quantidade_estoque, fabricante, fornecedor, deleted_at) 
VALUES 
    ("Arroz", "AZ1", "Arroz Integral", "alimentos", 10.50, "kg", 5.0, 150, "Sepé", "MegaG", NOW()),
    ("Feijão", "AZ2", "Feijão Preto", "alimentos", 10.80, "kg", 5.0, 120, "Feijó", "MegaG"),
    ("Macarrão", "AZ3", "Macarrão Parafuso", "alimentos", 9.89, "kg", 1.0, 80, "Sepé", "MegaG"),
    ("Toddy", "AZ4", "Achocolatado em Pó", "alimentos", 6.80, "g", 700, 175, "PepsiCo", "Nestlê"),
    ("Cerveja", "AZ5", "Cerveja Puro Malte", "bebidas", 5.60, "L", 0.500, 40, "Brahma", "Brahma"),
    ("Refrigerante", "AZ6", "Coca-Cola", "bebidas", 6.50, "L", 2.0, 155, "Coca Cola", "Coca Cola"),
    ("Água", "AZ7", "Água Mineral", "bebidas", 7.00, "L", 1.5, 150, "Campinho", "Campinho Distribuidora"),
    ("Biscoito", "AZ8", "Biscoito Recheado Passatempo", "alimentos", 5.90, "g", 700, 70, "Passa Tempo", "MegaG"),
    ("Bom-bom", "AZ9", "Bom-bom de chocolate", "alimentos", 1.50, "g", 210, 350, "Cacau Show", "Cacau Show"),
    ("Leite", "AZ10", "Leite", "bebidas", 5.50, "L", 1.0, 210, "Piracanjuba", "MegaG");