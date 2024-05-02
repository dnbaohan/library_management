# How to use git
1. `git status` to check status of files (not tracked, tracked: new and modified )
2. `git add .` to add all files to **staged changes** (check on **Source control**)
3. `git commit -m"<your message>"` to commit your new version.
4. `git push origin main` to push your changes to remote repository on Github with `origin` is your remote and `main` is your branch
   
>> Press `Ctrl + Shift + V` to watch this file

# Step to impl one feature:
1. Read requirements
2. Run SQL queries on Command line **PHP MY ADMIN**
3. Connect to db in server
4. Execute the queries that generated in `step 2`
5. After getting the results, fill it in to your prepared `html`

2024-01-07  9:38:26 0 [Note] Starting MariaDB 10.4.32-MariaDB source revision c4143f909528e3fab0677a28631d10389354c491 as process 12912
2024-01-07  9:38:26 0 [Note] InnoDB: Mutexes and rw_locks use Windows interlocked functions
2024-01-07  9:38:26 0 [Note] InnoDB: Uses event mutexes
2024-01-07  9:38:26 0 [Note] InnoDB: Compressed tables use zlib 1.3
2024-01-07  9:38:26 0 [Note] InnoDB: Number of pools: 1
2024-01-07  9:38:26 0 [Note] InnoDB: Using SSE2 crc32 instructions
2024-01-07  9:38:26 0 [Note] InnoDB: Initializing buffer pool, total size = 16M, instances = 1, chunk size = 16M
2024-01-07  9:38:26 0 [Note] InnoDB: Completed initialization of buffer pool
2024-01-07  9:38:26 0 [Note] InnoDB: 128 out of 128 rollback segments are active.
2024-01-07  9:38:26 0 [Note] InnoDB: Creating shared tablespace for temporary tables
2024-01-07  9:38:26 0 [Note] InnoDB: Setting file 'C:\xampp\mysql\data\ibtmp1' size to 12 MB. Physically writing the file full; Please wait ...
2024-01-07  9:38:26 0 [Note] InnoDB: File 'C:\xampp\mysql\data\ibtmp1' size is now 12 MB.
2024-01-07  9:38:26 0 [Note] InnoDB: Waiting for purge to start
2024-01-07  9:38:26 0 [Note] InnoDB: 10.4.32 started; log sequence number 5282640; transaction id 4739
2024-01-07  9:38:26 0 [Note] InnoDB: Loading buffer pool(s) from C:\xampp\mysql\data\ib_buffer_pool
2024-01-07  9:38:26 0 [Note] Plugin 'FEEDBACK' is disabled.
2024-01-07  9:38:26 0 [Note] InnoDB: Buffer pool(s) load completed at 240107  9:38:26
2024-01-07  9:38:26 0 [Note] Server socket created on IP: '::'.

2024-01-07  9:42:10 0 [Note] Starting MariaDB 10.4.32-MariaDB source revision c4143f909528e3fab0677a28631d10389354c491 as process 7028
2024-01-07  9:42:10 0 [Note] InnoDB: Mutexes and rw_locks use Windows interlocked functions
2024-01-07  9:42:10 0 [Note] InnoDB: Uses event mutexes
2024-01-07  9:42:10 0 [Note] InnoDB: Compressed tables use zlib 1.3
2024-01-07  9:42:10 0 [Note] InnoDB: Number of pools: 1
2024-01-07  9:42:10 0 [Note] InnoDB: Using SSE2 crc32 instructions
2024-01-07  9:42:10 0 [Note] InnoDB: Initializing buffer pool, total size = 16M, instances = 1, chunk size = 16M
2024-01-07  9:42:10 0 [Note] InnoDB: Completed initialization of buffer pool
2024-01-07  9:42:10 0 [Note] InnoDB: Starting crash recovery from checkpoint LSN=300288
2024-01-07  9:42:10 0 [Warning] InnoDB: Are you sure you are using the right ib_logfiles to start up the database? Log sequence number in the ib_logfiles is 300288, less than the log sequence number in the first system tablespace file header, 5282640.
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=423] with future log sequence number 4733646
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=298] with future log sequence number 4733646
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=422] with future log sequence number 4733602
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=297] with future log sequence number 4733602
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=295] with future log sequence number 4733558
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=419] with future log sequence number 4733514
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=294] with future log sequence number 4733514
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=418] with future log sequence number 4733470
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=268] with future log sequence number 4914228
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=399] with future log sequence number 4914228
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=267] with future log sequence number 4914168
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=398] with future log sequence number 4914168
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=266] with future log sequence number 4914124
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=397] with future log sequence number 4914124
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=265] with future log sequence number 4914080
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=396] with future log sequence number 4914080
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=264] with future log sequence number 4914036
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=395] with future log sequence number 4914036
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=263] with future log sequence number 4913992
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=394] with future log sequence number 4913992
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=262] with future log sequence number 4913948
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=393] with future log sequence number 4913948
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=261] with future log sequence number 4913904
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=428] with future log sequence number 4913904
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=260] with future log sequence number 4913860
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=437] with future log sequence number 4913860
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=259] with future log sequence number 4913816
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=436] with future log sequence number 4913816
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=258] with future log sequence number 4913772
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=391] with future log sequence number 4913772
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=257] with future log sequence number 4913728
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=390] with future log sequence number 4913728
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=256] with future log sequence number 4913684
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=392] with future log sequence number 4913684
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=255] with future log sequence number 4913624
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=389] with future log sequence number 4913624
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=254] with future log sequence number 4913580
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=388] with future log sequence number 4913580
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=253] with future log sequence number 4913536
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=372] with future log sequence number 4913536
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=252] with future log sequence number 4913492
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=387] with future log sequence number 4913492
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=251] with future log sequence number 4913448
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=386] with future log sequence number 4913448
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=229] with future log sequence number 5120661
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=366] with future log sequence number 5120661
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=228] with future log sequence number 5120617
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=322] with future log sequence number 5246579
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=332] with future log sequence number 5245007
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=200] with future log sequence number 5245007
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=229] with future log sequence number 5246579
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=366] with future log sequence number 5246579
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=228] with future log sequence number 5246457
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=365] with future log sequence number 5246457
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=227] with future log sequence number 5246351
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=364] with future log sequence number 5246351
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=226] with future log sequence number 5246307
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=363] with future log sequence number 5246307
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=339] with future log sequence number 5246263
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=225] with future log sequence number 5246263
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=224] with future log sequence number 5246219
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=361] with future log sequence number 5246219
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=223] with future log sequence number 5246175
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=360] with future log sequence number 5246175
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=222] with future log sequence number 5246131
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=359] with future log sequence number 5246131
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=221] with future log sequence number 5246025
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=358] with future log sequence number 5246025
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=220] with future log sequence number 5245981
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=357] with future log sequence number 5245981
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=219] with future log sequence number 5245921
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=356] with future log sequence number 5245921
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=218] with future log sequence number 5245815
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=355] with future log sequence number 5245815
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=390] with future log sequence number 5281852
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=257] with future log sequence number 5281841
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=392] with future log sequence number 5278074
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=256] with future log sequence number 5278063
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=389] with future log sequence number 5277236
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=388] with future log sequence number 5273466
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=372] with future log sequence number 5273128
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=387] with future log sequence number 5270861
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=386] with future log sequence number 5271144
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=371] with future log sequence number 5267119
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=370] with future log sequence number 5266732
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=384] with future log sequence number 5266478
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=248] with future log sequence number 5272251
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=385] with future log sequence number 5266214
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=247] with future log sequence number 5272207
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=382] with future log sequence number 5265960
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=246] with future log sequence number 5272163
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=381] with future log sequence number 5265471
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=245] with future log sequence number 5272119
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=383] with future log sequence number 5261621
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=244] with future log sequence number 5272059
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=380] with future log sequence number 5260855
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=242] with future log sequence number 5272015
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=379] with future log sequence number 5258673
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=241] with future log sequence number 5271971
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=369] with future log sequence number 5258363
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=240] with future log sequence number 5271927
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=239] with future log sequence number 5271883
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=377] with future log sequence number 5253651
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=238] with future log sequence number 5271777
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=427] with future log sequence number 5253149
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=237] with future log sequence number 5271733
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=376] with future log sequence number 5252647
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=236] with future log sequence number 5271689
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=442] with future log sequence number 5251842
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=235] with future log sequence number 5271645
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=426] with future log sequence number 5252143
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=234] with future log sequence number 5271601
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=374] with future log sequence number 5247955
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=0, page number=322] with future log sequence number 5271876
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=150, page number=4] with future log sequence number 5277321
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=2, page number=3] with future log sequence number 5282094
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=1, page number=3] with future log sequence number 5281874
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=148, page number=4] with future log sequence number 5277265
2024-01-07  9:42:10 0 [Warning] InnoDB: Ignoring a doublewrite copy of page [page id: space=151, page number=4] with future log sequence number 5277443
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=7] log sequence number 5187506 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=11] log sequence number 4726094 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=6] log sequence number 4730137 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=301] log sequence number 4730137 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=45] log sequence number 4730176 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=306] log sequence number 4730176 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=46] log sequence number 4730215 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=309] log sequence number 4730215 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=47] log sequence number 4730254 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=311] log sequence number 4730254 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=48] log sequence number 4730293 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=312] log sequence number 4730293 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=49] log sequence number 4173700 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=313] log sequence number 4173700 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=50] log sequence number 4730332 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=314] log sequence number 4730332 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=51] log sequence number 4730387 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=315] log sequence number 4730387 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=52] log sequence number 5187120 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=316] log sequence number 5187120 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=53] log sequence number 5209881 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=317] log sequence number 5209881 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=54] log sequence number 5209920 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=318] log sequence number 5209920 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=55] log sequence number 5209959 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=319] log sequence number 5209959 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=56] log sequence number 5209998 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=320] log sequence number 5209998 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=57] log sequence number 5210037 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=321] log sequence number 5210037 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=58] log sequence number 5210076 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=323] log sequence number 5210076 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=59] log sequence number 5210131 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=324] log sequence number 5210131 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=60] log sequence number 5210170 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=325] log sequence number 5210170 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=61] log sequence number 5210209 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=326] log sequence number 5210209 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=62] log sequence number 5210248 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=327] log sequence number 5210248 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=63] log sequence number 5210287 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=328] log sequence number 5210287 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=192] log sequence number 5210331 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=329] log sequence number 5210331 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=193] log sequence number 5210375 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=330] log sequence number 5210375 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=194] log sequence number 5210419 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=331] log sequence number 5210419 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=195] log sequence number 5210463 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=441] log sequence number 5210463 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=196] log sequence number 5210507 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=440] log sequence number 5210507 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=197] log sequence number 5210551 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=334] log sequence number 5210551 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=198] log sequence number 5210595 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=439] log sequence number 5210595 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=199] log sequence number 5210655 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=336] log sequence number 5210655 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=200] log sequence number 5245007 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=332] log sequence number 5245007 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=201] log sequence number 5245051 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=338] log sequence number 5245051 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=202] log sequence number 5245095 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=443] log sequence number 5245095 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=203] log sequence number 5245139 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=340] log sequence number 5245139 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=204] log sequence number 5245183 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=341] log sequence number 5245183 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=205] log sequence number 5245227 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=444] log sequence number 5245227 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=206] log sequence number 5245271 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=343] log sequence number 5245271 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=207] log sequence number 5245315 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=445] log sequence number 5245315 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=208] log sequence number 5245359 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=333] log sequence number 5245359 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=209] log sequence number 5245403 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=346] log sequence number 5245403 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=210] log sequence number 5245463 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=438] log sequence number 5245463 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=211] log sequence number 5245507 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=335] log sequence number 5245507 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=212] log sequence number 5245551 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=337] log sequence number 5245551 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Page [page id: space=0, page number=213] log sequence number 5245595 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:10 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=446] log sequence number 5245595 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=214] log sequence number 5245639 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=351] log sequence number 5245639 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=215] log sequence number 5245683 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=352] log sequence number 5245683 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=216] log sequence number 5245727 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=447] log sequence number 5245727 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=217] log sequence number 5245771 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=354] log sequence number 5245771 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=218] log sequence number 5245815 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=355] log sequence number 5245815 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=219] log sequence number 5245921 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=220] log sequence number 5245981 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=357] log sequence number 5245981 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=221] log sequence number 5246025 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=358] log sequence number 5246025 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=222] log sequence number 5246131 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=223] log sequence number 5246175 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=360] log sequence number 5246175 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=224] log sequence number 5246219 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=361] log sequence number 5246219 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=225] log sequence number 5246263 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=339] log sequence number 5246263 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=226] log sequence number 5246307 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=363] log sequence number 5246307 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=227] log sequence number 5246351 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=364] log sequence number 5246351 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=228] log sequence number 5246457 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=229] log sequence number 5246579 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=230] log sequence number 5271409 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=367] log sequence number 5247009 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=231] log sequence number 5271453 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=368] log sequence number 5247296 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=232] log sequence number 5271497 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=373] log sequence number 5247560 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=233] log sequence number 5271541 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=374] log sequence number 5247955 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=234] log sequence number 5271601 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=426] log sequence number 5252143 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=235] log sequence number 5271645 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=442] log sequence number 5251842 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=236] log sequence number 5271689 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=376] log sequence number 5252647 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=237] log sequence number 5271733 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=427] log sequence number 5253149 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=238] log sequence number 5271777 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=377] log sequence number 5253651 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=239] log sequence number 5271883 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=240] log sequence number 5271927 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=369] log sequence number 5258363 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=241] log sequence number 5271971 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=379] log sequence number 5258673 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=242] log sequence number 5272015 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=380] log sequence number 5260855 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=244] log sequence number 5272059 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=383] log sequence number 5261621 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=245] log sequence number 5272119 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=381] log sequence number 5265471 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=246] log sequence number 5272163 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=382] log sequence number 5265960 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=247] log sequence number 5272207 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=385] log sequence number 5266214 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=248] log sequence number 5272251 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=384] log sequence number 5266478 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=249] log sequence number 5272300 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=370] log sequence number 5266732 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=250] log sequence number 5272344 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=371] log sequence number 5267119 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=251] log sequence number 5272388 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=386] log sequence number 5271144 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=252] log sequence number 5272432 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=387] log sequence number 5270861 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=253] log sequence number 5273133 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=372] log sequence number 5273128 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=254] log sequence number 5273471 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=388] log sequence number 5273466 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=255] log sequence number 5277241 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=389] log sequence number 5277236 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=256] log sequence number 5278063 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=392] log sequence number 5278074 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=257] log sequence number 5281841 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=390] log sequence number 5281852 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=258] log sequence number 4913772 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=391] log sequence number 4913772 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=259] log sequence number 4913816 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=436] log sequence number 4913816 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=260] log sequence number 4913860 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=437] log sequence number 4913860 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=261] log sequence number 4913904 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=428] log sequence number 4913904 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=262] log sequence number 4913948 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=393] log sequence number 4913948 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=263] log sequence number 4913992 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=394] log sequence number 4913992 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=264] log sequence number 4914036 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=395] log sequence number 4914036 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=265] log sequence number 4914080 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=396] log sequence number 4914080 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=266] log sequence number 4914124 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=397] log sequence number 4914124 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=267] log sequence number 4914168 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=398] log sequence number 4914168 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=268] log sequence number 4914228 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=399] log sequence number 4914228 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=269] log sequence number 4914272 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=400] log sequence number 4914272 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=270] log sequence number 4914316 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=401] log sequence number 4914316 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=271] log sequence number 4914360 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=402] log sequence number 4914360 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=272] log sequence number 4914404 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=403] log sequence number 4914404 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=273] log sequence number 4933734 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=404] log sequence number 4933734 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=274] log sequence number 4933778 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=405] log sequence number 4933778 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=275] log sequence number 4732778 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=406] log sequence number 4732778 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=276] log sequence number 4732822 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=407] log sequence number 4732822 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=277] log sequence number 4732866 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=409] log sequence number 4732866 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=278] log sequence number 4176121 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=410] log sequence number 4176121 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=279] log sequence number 4732910 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=411] log sequence number 4732910 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=280] log sequence number 4732970 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=429] log sequence number 4732970 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=281] log sequence number 4733014 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=430] log sequence number 4733014 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=282] log sequence number 4176297 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=431] log sequence number 4176297 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=283] log sequence number 4733058 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=432] log sequence number 4733058 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=284] log sequence number 4733102 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=433] log sequence number 4733102 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=285] log sequence number 4733146 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=434] log sequence number 4733146 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=286] log sequence number 4733190 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=412] log sequence number 4733190 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=287] log sequence number 4733234 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=413] log sequence number 4733234 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=288] log sequence number 4733278 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=414] log sequence number 4733278 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=289] log sequence number 4733322 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=415] log sequence number 4733322 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=290] log sequence number 4733366 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=416] log sequence number 4733366 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=291] log sequence number 4733410 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=435] log sequence number 4733410 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=292] log sequence number 4176665 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=417] log sequence number 4176665 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=293] log sequence number 4733470 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=418] log sequence number 4733470 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=294] log sequence number 4733514 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=419] log sequence number 4733514 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=295] log sequence number 4733558 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=420] log sequence number 4733558 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=296] log sequence number 4176841 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=421] log sequence number 4176841 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=297] log sequence number 4733602 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=422] log sequence number 4733602 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=298] log sequence number 4733646 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=423] log sequence number 4733646 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=299] log sequence number 4733690 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=424] log sequence number 4733690 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=300] log sequence number 4733734 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=425] log sequence number 4733734 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=0] log sequence number 5271855 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=8] log sequence number 4726089 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=10] log sequence number 4726174 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=12] log sequence number 4726133 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=307] log sequence number 4726040 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=302] log sequence number 4695501 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=303] log sequence number 4695479 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=304] log sequence number 4695495 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=308] log sequence number 4726164 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Operating system error number 3 in a file operation.
2024-01-07  9:42:11 0 [ERROR] InnoDB: The error means the system cannot find the path specified.
2024-01-07  9:42:11 0 [ERROR] InnoDB: If you are installing InnoDB, remember that you must create directories yourself, InnoDB does not create them.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Cannot open datafile for read-only: '.\library\author.ibd' OS error: 203
2024-01-07  9:42:11 0 [ERROR] InnoDB: Operating system error number 203 in a file operation.
2024-01-07  9:42:11 0 [Note] InnoDB: Some operating system error numbers are described at https://mariadb.com/kb/en/library/operating-system-error-codes/
2024-01-07  9:42:11 0 [ERROR] InnoDB: Could not find a valid tablespace file for ``library`.`author``. Please refer to https://mariadb.com/kb/en/innodb-data-dictionary-troubleshooting/ for how to resolve the issue.
2024-01-07  9:42:11 0 [Warning] InnoDB: Ignoring tablespace for `library`.`author` because it could not be opened.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Operating system error number 3 in a file operation.
2024-01-07  9:42:11 0 [ERROR] InnoDB: The error means the system cannot find the path specified.
2024-01-07  9:42:11 0 [ERROR] InnoDB: If you are installing InnoDB, remember that you must create directories yourself, InnoDB does not create them.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Cannot open datafile for read-only: '.\library\book.ibd' OS error: 203
2024-01-07  9:42:11 0 [ERROR] InnoDB: Operating system error number 203 in a file operation.
2024-01-07  9:42:11 0 [Note] InnoDB: Some operating system error numbers are described at https://mariadb.com/kb/en/library/operating-system-error-codes/
2024-01-07  9:42:11 0 [ERROR] InnoDB: Could not find a valid tablespace file for ``library`.`book``. Please refer to https://mariadb.com/kb/en/innodb-data-dictionary-troubleshooting/ for how to resolve the issue.
2024-01-07  9:42:11 0 [Warning] InnoDB: Ignoring tablespace for `library`.`book` because it could not be opened.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Operating system error number 3 in a file operation.
2024-01-07  9:42:11 0 [ERROR] InnoDB: The error means the system cannot find the path specified.
2024-01-07  9:42:11 0 [ERROR] InnoDB: If you are installing InnoDB, remember that you must create directories yourself, InnoDB does not create them.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Cannot open datafile for read-only: '.\library\book_author.ibd' OS error: 203
2024-01-07  9:42:11 0 [ERROR] InnoDB: Operating system error number 203 in a file operation.
2024-01-07  9:42:11 0 [Note] InnoDB: Some operating system error numbers are described at https://mariadb.com/kb/en/library/operating-system-error-codes/
2024-01-07  9:42:11 0 [ERROR] InnoDB: Could not find a valid tablespace file for ``library`.`book_author``. Please refer to https://mariadb.com/kb/en/innodb-data-dictionary-troubleshooting/ for how to resolve the issue.
2024-01-07  9:42:11 0 [Warning] InnoDB: Ignoring tablespace for `library`.`book_author` because it could not be opened.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Operating system error number 3 in a file operation.
2024-01-07  9:42:11 0 [ERROR] InnoDB: The error means the system cannot find the path specified.
2024-01-07  9:42:11 0 [ERROR] InnoDB: If you are installing InnoDB, remember that you must create directories yourself, InnoDB does not create them.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Cannot open datafile for read-only: '.\library\book_cate.ibd' OS error: 203
2024-01-07  9:42:11 0 [ERROR] InnoDB: Operating system error number 203 in a file operation.
2024-01-07  9:42:11 0 [Note] InnoDB: Some operating system error numbers are described at https://mariadb.com/kb/en/library/operating-system-error-codes/
2024-01-07  9:42:11 0 [ERROR] InnoDB: Could not find a valid tablespace file for ``library`.`book_cate``. Please refer to https://mariadb.com/kb/en/innodb-data-dictionary-troubleshooting/ for how to resolve the issue.
2024-01-07  9:42:11 0 [Warning] InnoDB: Ignoring tablespace for `library`.`book_cate` because it could not be opened.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Operating system error number 3 in a file operation.
2024-01-07  9:42:11 0 [ERROR] InnoDB: The error means the system cannot find the path specified.
2024-01-07  9:42:11 0 [ERROR] InnoDB: If you are installing InnoDB, remember that you must create directories yourself, InnoDB does not create them.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Cannot open datafile for read-only: '.\library\category.ibd' OS error: 203
2024-01-07  9:42:11 0 [ERROR] InnoDB: Operating system error number 203 in a file operation.
2024-01-07  9:42:11 0 [Note] InnoDB: Some operating system error numbers are described at https://mariadb.com/kb/en/library/operating-system-error-codes/
2024-01-07  9:42:11 0 [ERROR] InnoDB: Could not find a valid tablespace file for ``library`.`category``. Please refer to https://mariadb.com/kb/en/innodb-data-dictionary-troubleshooting/ for how to resolve the issue.
2024-01-07  9:42:11 0 [Warning] InnoDB: Ignoring tablespace for `library`.`category` because it could not be opened.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Operating system error number 3 in a file operation.
2024-01-07  9:42:11 0 [ERROR] InnoDB: The error means the system cannot find the path specified.
2024-01-07  9:42:11 0 [ERROR] InnoDB: If you are installing InnoDB, remember that you must create directories yourself, InnoDB does not create them.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Cannot open datafile for read-only: '.\library\storage.ibd' OS error: 203
2024-01-07  9:42:11 0 [ERROR] InnoDB: Operating system error number 203 in a file operation.
2024-01-07  9:42:11 0 [Note] InnoDB: Some operating system error numbers are described at https://mariadb.com/kb/en/library/operating-system-error-codes/
2024-01-07  9:42:11 0 [ERROR] InnoDB: Could not find a valid tablespace file for ``library`.`storage``. Please refer to https://mariadb.com/kb/en/innodb-data-dictionary-troubleshooting/ for how to resolve the issue.
2024-01-07  9:42:11 0 [Warning] InnoDB: Ignoring tablespace for `library`.`storage` because it could not be opened.
2024-01-07  9:42:11 0 [Note] InnoDB: 128 out of 128 rollback segments are active.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=305] log sequence number 4695527 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [Note] InnoDB: Removed temporary tablespace data file: "ibtmp1"
2024-01-07  9:42:11 0 [Note] InnoDB: Creating shared tablespace for temporary tables
2024-01-07  9:42:11 0 [Note] InnoDB: Setting file 'C:\xampp\mysql\data\ibtmp1' size to 12 MB. Physically writing the file full; Please wait ...
2024-01-07  9:42:11 0 [Note] InnoDB: File 'C:\xampp\mysql\data\ibtmp1' size is now 12 MB.
2024-01-07  9:42:11 0 [Note] InnoDB: Waiting for purge to start
2024-01-07  9:42:11 2 [ERROR] InnoDB: Page [page id: space=0, page number=9] log sequence number 4726055 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 2 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 2 [ERROR] InnoDB: Operating system error number 3 in a file operation.
2024-01-07  9:42:11 2 [ERROR] InnoDB: The error means the system cannot find the path specified.
2024-01-07  9:42:11 2 [ERROR] InnoDB: If you are installing InnoDB, remember that you must create directories yourself, InnoDB does not create them.
2024-01-07  9:42:11 2 [ERROR] InnoDB: Cannot open datafile for read-only: '.\library\book_cate.ibd' OS error: 203
2024-01-07  9:42:11 2 [ERROR] InnoDB: Operating system error number 203 in a file operation.
2024-01-07  9:42:11 2 [Note] InnoDB: Some operating system error numbers are described at https://mariadb.com/kb/en/library/operating-system-error-codes/
2024-01-07  9:42:11 2 [ERROR] InnoDB: Could not find a valid tablespace file for ``library`.`book_cate``. Please refer to https://mariadb.com/kb/en/innodb-data-dictionary-troubleshooting/ for how to resolve the issue.
2024-01-07  9:42:11 1 [ERROR] InnoDB: Operating system error number 3 in a file operation.
2024-01-07  9:42:11 1 [ERROR] InnoDB: The error means the system cannot find the path specified.
2024-01-07  9:42:11 1 [ERROR] InnoDB: If you are installing InnoDB, remember that you must create directories yourself, InnoDB does not create them.
2024-01-07  9:42:11 1 [ERROR] InnoDB: Cannot open datafile for read-only: '.\library\book.ibd' OS error: 203
2024-01-07  9:42:11 1 [ERROR] InnoDB: Operating system error number 203 in a file operation.
2024-01-07  9:42:11 1 [Note] InnoDB: Some operating system error numbers are described at https://mariadb.com/kb/en/library/operating-system-error-codes/
2024-01-07  9:42:11 1 [ERROR] InnoDB: Could not find a valid tablespace file for ``library`.`book``. Please refer to https://mariadb.com/kb/en/innodb-data-dictionary-troubleshooting/ for how to resolve the issue.
2024-01-07  9:42:11 4 [ERROR] InnoDB: Operating system error number 3 in a file operation.
2024-01-07  9:42:11 4 [ERROR] InnoDB: The error means the system cannot find the path specified.
2024-01-07  9:42:11 4 [ERROR] InnoDB: If you are installing InnoDB, remember that you must create directories yourself, InnoDB does not create them.
2024-01-07  9:42:11 4 [ERROR] InnoDB: Cannot open datafile for read-only: '.\library\book_author.ibd' OS error: 203
2024-01-07  9:42:11 4 [ERROR] InnoDB: Operating system error number 203 in a file operation.
2024-01-07  9:42:11 4 [Note] InnoDB: Some operating system error numbers are described at https://mariadb.com/kb/en/library/operating-system-error-codes/
2024-01-07  9:42:11 4 [ERROR] InnoDB: Could not find a valid tablespace file for ``library`.`book_author``. Please refer to https://mariadb.com/kb/en/innodb-data-dictionary-troubleshooting/ for how to resolve the issue.
2024-01-07  9:42:11 0 [Note] InnoDB: 10.4.32 started; log sequence number 300297; transaction id 4739
2024-01-07  9:42:11 0 [Note] InnoDB: Loading buffer pool(s) from C:\xampp\mysql\data\ib_buffer_pool
2024-01-07  9:42:11 0 [Note] Plugin 'FEEDBACK' is disabled.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Page [page id: space=0, page number=243] log sequence number 4194905 is in the future! Current system log sequence number 300306.
2024-01-07  9:42:11 0 [ERROR] InnoDB: Your database may be corrupt or you may have copied the InnoDB tablespace but not the InnoDB log files. Please refer to https://mariadb.com/kb/en/library/innodb-recovery-modes/ for information about forcing recovery.
2024-01-07  9:42:11 0 [Note] InnoDB: Buffer pool(s) load completed at 240107  9:42:11
2024-01-07  9:42:11 0 [Note] Server socket created on IP: '::'.

