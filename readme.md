# readme

**basic php aplikasi sederhana untuk input mahasiswa**

## schema

mahasiswas:
- id: num
- name: str
- nim: str
- prodi: str
- fakultas: str
- angkatan: int

## command

migration :
```bash
sqlite3 database/db.sqlite < database/migration.sql
```

drop :
```bash
sqlite3 database/db.sqlite < database/drop.sql
```

query :
```bash
sqlite3 database/db.sqlite < database/query.sql
```

seed :
```bash
sqlite3 database/db.sqlite < database/seed.sql
```

serve :
```bash
php -S localhost:8000
```

