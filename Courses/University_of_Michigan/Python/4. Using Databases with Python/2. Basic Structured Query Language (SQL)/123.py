fname = input('Enter file name: ')
if (len(fname) < 1): fname = 'mbox.txt'
fh = open(fname)
for line in fh:
    if not line.startswith('From '): continue
    pieces = line.split()
    email = pieces[1]
    org1 = email.split('@')
    org = org1[1]
    print (org)
