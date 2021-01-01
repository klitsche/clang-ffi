// define
#define ONE 1.0123456789
#define TWO ((1+3)-2)
#define THREE ((TWO)-1)
#define FOUR "five"

// type definitions
// built in
typedef int int_t;
typedef float float_t;
typedef char* char_t;

// pointer
typedef void* foo;

// struct
typedef struct a a_t;
typedef struct b {
    a_t *field1;
    a_t *field2;
} b_t;

// enum
typedef enum qux {
   QUUX,
   CORGE,
   QUUX_CORGE = (QUUX | CORGE),
} grault;

// array
typedef unsigned char bar[23];
typedef long baz[][42];

// function pointer
typedef char *(*(**hairy[][8])())[];

// function
/**
 * @brief A brief description.
 *
 * Some more details.
 *
 * @param[in] arg1 desc arg1
 * @param[in] arg1 desc arg1
 * @param[out] return desc
 */
extern char** func1(char_t arg1, hairy arg1);
void func2(void);

// var
struct a_t aVar;

double one = ONE;
int two = TWO;
int three = THREE;
char* four = FOUR;