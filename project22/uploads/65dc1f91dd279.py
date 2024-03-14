def f(N,a):
    if N==1:
        return 0;
    if N not in a:
        if(N % 2 == 0):
            return 1 + f(N//2 , a)
        else:
            a[N] = 1 + f(3 * N + 1,a)
    return a[N]
def main():
    try:
        N = int(input())
        if N < 1 or N >= 10**15:
            raise ValueError("N khong hơp lệ.")
        a = {}
        resutl =  f(N,a)

        print(f"{resutl}")

    except ValueError as e:
        print("Lỗi: {e}")
if __name__=="__main__":
    main()
