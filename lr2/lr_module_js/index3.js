(async ( => {
    const { sayFirst } = await import('https://kodaktor.ru/j/module_export');
    console.log(sayFirst());
})();