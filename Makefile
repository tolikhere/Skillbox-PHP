number := 1
new_dir := module-1/homework-$(work)

create-homework:
	mkdir $(new_dir)
	i=$(number); \
	 while [ $${i} -le $(amount) ] ; do \
		touch $(new_dir)/task_$${i}.php ; \
		i=`expr $$i + 1` ; \
	done; \
	true
	touch $(new_dir)/README.md

