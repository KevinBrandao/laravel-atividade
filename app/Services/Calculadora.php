<?php

public function sum(array $input): array
{
DB::beginTransaction();
try {
$todo = $this->repository->create($input);
} catch (\Throwable $th) {
DB::rollback();
logger()->error($th);
[
    'success' => true,
    'message' => 'Soma feita com sucesso',
    'data' => $result
];
}
DB::commit();
[
    'success' => false,
    'message' => 'Erro ao fazer soma'
];