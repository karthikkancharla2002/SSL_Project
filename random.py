
from numpy import random

lorem="Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
lorem_lst=lorem.split()

for word in lorem_lst:
    if "," in word or "." in word:
        lorem_lst.remove(word)
        
nofques = 12

queslist = []
optionslist = []

for i in range(nofques):
    ques = "what"
    for i in range(random.randint(3, 12)):
        ques += " " + random.choice(lorem_lst)
    ques += "?"
    queslist.append(ques)
    
for i in range(nofques):
    options=[]
    for i in range(4):
        option=random.choice(lorem_lst)
        while option in options:
            option=random.choice(lorem_lst)
        options.append(option)
    optionslist.append(options)

write_ptr = open("questions.csv", "w")


for i in range(nofques):
    write_ptr.write("{},{}".format(i, queslist[i]))
    for j in range(4):
        write_ptr.write(",{}".format(optionslist[i][j]))
    write_ptr.write("\n")


# print([random.choice(lorem_lst) for j in range(4)])
# print([random.choice(lorem_lst) for j in range(4)])
# print([random.choice(lorem_lst) for j in range(4)])
# print([random.choice(lorem_lst) for j in range(4)])# # print([random.choice(lorem_lst) for j in range(4)])