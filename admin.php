<?php
require_once 'db.php';

$result = $conn->query("SELECT * FROM messages ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin – Mesaje</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen">

    <div class="max-w-4xl mx-auto px-6 py-12">

        <div class="flex justify-between items-center mb-8">
            <h1 class="text-2xl font-bold text-gray-900">Mesaje primite</h1>
            <a href="index.php" class="text-sm text-gray-500 hover:text-gray-800 transition">← Înapoi la site</a>
        </div>

        <?php if ($result->num_rows === 0): ?>
            <div class="bg-white rounded-2xl p-8 text-center text-gray-400">
                Nu există mesaje încă.
            </div>
        <?php else: ?>
            <div class="flex flex-col gap-4">
                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="bg-white rounded-2xl p-6 border border-gray-200">
                        <div class="flex justify-between items-start mb-3">
                            <div>
                                <h3 class="font-semibold text-gray-900"><?= htmlspecialchars($row['name']) ?></h3>
                                <p class="text-sm text-gray-400"><?= htmlspecialchars($row['email']) ?></p>
                            </div>
                            <span class="text-xs text-gray-400"><?= $row['created_at'] ?></span>
                        </div>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            <?= htmlspecialchars($row['message']) ?>
                        </p>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

    </div>

</body>
</html>